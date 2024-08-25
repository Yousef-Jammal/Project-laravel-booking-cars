<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;



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

        // تمرير البيانات إلى العرض
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

 // الحصول على السيارة بناءً على ID
        $isAvailable = $car->is_available; // تأكد من وجود عمود `is_available` في جدول السيارات

        $car = Car::findOrFail($request->car_id);

        // حساب عدد الأيام بين تاريخ الاستلام والإرجاع
        $pickupDate = Carbon::parse($request->pickup_date_d);
        $returnDate = Carbon::parse($request->return_date_d);
        $days = $pickupDate->diffInDays($returnDate) + 1; // التأكد من حساب يوم واحد على الأقل

        // حساب السعر الكلي
        $totalPrice = $car->price_per_day * $days;

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
            'days' => $days,
            'car' => $car,
        ]);
    }
    public function submitReview(Request $request, $car_id)
{
    // تحقق من صحة البيانات
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'content' => 'required|string',
        'rating' => 'required|numeric|min:1|max:5',
    ]);

    // إنشاء تعليق جديد
    $review = Review::create([
        'car_id' => $car_id,
        'user_id' => auth()->id(), // إذا كان المستخدم مسجلاً
        'name' => $request->name,
        'email' => $request->email,
        'content' => $request->content,
        'rating' => $request->rating,
    ]);

    // تخزين اسم المستخدم والبريد الإلكتروني في الجلسة
    Session::put('user_name', $request->name);
    Session::put('user_email', $request->email);

    // إرجاع HTML للتعليق الجديد وعدد التعليقات الحالي
    $newReviewHtml = view('partials.review', ['review' => $review])->render();

    return response()->json([
        'success' => true,
        'newReviewHtml' => $newReviewHtml,
        'reviewCount' => $review->car->reviews->count(),
    ]);
}

}


