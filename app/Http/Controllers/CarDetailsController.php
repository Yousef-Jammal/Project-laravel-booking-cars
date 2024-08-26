<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Carbon\Carbon;

class CarDetailsController extends Controller
{
    public function show($id)
    {
        // استرجاع بيانات السيارة بناءً على المعرف (id)
        $car = Car::findOrFail($id);

        // تمرير البيانات إلى العرض
        return view('listing-details', compact('car'));
    }

    public function showFeatures($id)
    {
        // استرجاع السيارة مع الميزات الخاصة بها
        $car = Car::with('features')->findOrFail($id);

        // تمرير البيانات إلى العرض
        return view('listing-details', compact('car'));
    }

    public function showReviews($id)
    {
        // جلب السيارة مع المراجعات المرتبطة بها
        $car = Car::with('reviews')->findOrFail($id);

        // تمرير بيانات السيارة مع المراجعات إلى العرض
        return view('listing-details', compact('car'));
    }

    public function showOwnerDetails($id)
    {
        // استرجاع بيانات السيارة مع مالكها
        $car = Car::with(['user.company'])->findOrFail($id);

        // تمرير البيانات إلى العرض
        return view('listing-details', compact('car'));
    }

    public function checkAvailability(Request $request)
    {
        // جلب بيانات السيارة بناءً على معرف السيارة
        $car = Car::findOrFail($request->car_id);

        // التأكد من توافر السيارة بناءً على التواريخ المدخلة (هنا يتم فقط افتراض القيمة من عمود is_available)
        $isAvailable = $car->is_available;

        // حساب عدد الأيام بين تاريخ الاستلام والإرجاع
        $pickupDate = Carbon::parse($request->pickup_date_d);
        $returnDate = Carbon::parse($request->return_date_d);
        $days = $pickupDate->diffInDays($returnDate) + 1; // التأكد من حساب يوم واحد على الأقل

        // حساب السعر الكلي
        $totalPrice = $car->price_per_day * $days;

        // تحديد قيمة ثابتة للضرائب والخدمات الإضافية
        $tax = 5; // ضريبة ثابتة
        $extraService = 10; // خدمة إضافية ثابتة

        // حساب الجراند توتال
        $grandTotal = $totalPrice + $tax + $extraService;

        // تخزين المعلومات في الـ session
        session([
            'pickup_location' => $request->pickup_location,
            'dropoff_location' => $request->dropoff_location,
            'pickup_date_d' => $request->pickup_date_d,
            'return_date_d' => $request->return_date_d,
            'total_price' => $totalPrice,
        ]);

        // تمرير البيانات للعرض
        return response()->json([
            'isAvailable' => $isAvailable,
            'pricePerDay' => $car->price_per_day,
            'totalPrice' => $totalPrice,
            'tax' => $tax,
            'extraService' => $extraService,
            'grandTotal' => $grandTotal,
            'days' => $days,
            'car' => $car,
        ]);
    }


    public function submitReview(Request $request, $car_id)
    {
        // جلب السيارة بناءً على معرفها
        $car = Car::findOrFail($car_id);

        // تحقق من صحة البيانات
        $request->validate([
            'content' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        // إنشاء تعليق جديد مع اسم المستخدم والإيميل
        $review = $car->reviews()->create([
            'user_id' => auth()->id(),
            'car_id' => $car_id,
            'date' => now(),
            'content' => $request->content,
            'rating' => $request->rating,
        ]);

        // إرجاع HTML للتعليق الجديد وعدد التعليقات الحالي
        $newReviewHtml = view('partials.review', ['review' => $review])->render();

        return response()->json([
            'success' => true,
            'newReviewHtml' => $newReviewHtml,
            'reviewCount' => $car->reviews->count(),
        ]);
    }

    public function showCarDetailsImg($carId)
{
    $car = Car::with('images')->findOrFail($carId);

    return view('listing-details', compact('car'));
}

}

