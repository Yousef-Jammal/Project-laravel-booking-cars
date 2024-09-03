<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CarDetailsController extends Controller
{
    public function show($id)
    {
        // استرجاع بيانات السيارة بناءً على المعرف (id)
        $car = Car::with('reviews')->findOrFail($id);

        // حساب متوسط التقييم
        $averageRating = $car->reviews->avg('rating');

        // تمرير البيانات إلى العرض
        return view('listing-details', compact('car', 'averageRating'));
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

        // حساب متوسط التقييم
        $averageRating = $car->reviews->avg('rating');

        // تمرير بيانات السيارة مع المراجعات إلى العرض
        return view('listing-details', compact('car', 'averageRating'));
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
        $isAvailable = $car->availability;

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
            'days' => $days,
            'car' => $car,
        ]);
    }

    public function submitReview(Request $request, $car_id)
    {
        // Validate the incoming request data
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|max:1000',
        ]);

        // Retrieve the car instance
        $car = Car::findOrFail($car_id);

        // Attach the review to the car with the user as the pivot
        $car->reviews()->attach(Auth::id(), [
            'rating' => $request->input('rating'),
            'content' => $request->input('content'),
            'date' => now(),
        ]);

        // حساب متوسط التقييم بعد إضافة المراجعة الجديدة
        $averageRating = $car->reviews()->avg('rating');

        // Return the updated view with the new review
        return view('listing-details', compact('car', 'averageRating'));
    }

    public function showCarDetailsImg($carId)
    {
        $carimages = image::find($carId);

        return view('listing-details', compact('carimages'));
    }
    public function calculateAverageRating($carId)
{
    // استرجاع السيارة بناءً على المعرف (id)
    $car = Car::findOrFail($carId);

    // حساب متوسط التقييم لهذه السيارة من جدول التقييمات
    $averageRating = $car->reviews()->avg('rating');

    // إرجاع متوسط التقييم
    return $averageRating;
}

}

