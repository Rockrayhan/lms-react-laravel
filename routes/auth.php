<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CatelogueController;
use App\Http\Controllers\backend\LessonController;
use App\Http\Controllers\backend\ManufacturerController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ReviewController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});




// Products 
Route::get('product', [ProductController::class, 'index'])->name('product');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');




// Categrory
Route::get('category', [CategoryController::class, 'index'])->name('category');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');




// catalogue 
Route::get('catelogue', [CatelogueController::class, 'index'])->name('catelogue');
Route::get('catelogue/create', [CatelogueController::class, 'create'])->name('cateloguel.create');
Route::post('catelogue/store', [CatelogueController::class, 'store'])->name('catelogue.store');
Route::get('catelogue/edit/{id}', [CatelogueController::class, 'edit'])->name('catelogue.edit');
Route::post('catelogue/update/{id}', [CatelogueController::class, 'update'])->name('catelogue.update');
Route::get('catelogue/delete/{id}', [CatelogueController::class, 'destroy'])->name('catelogue.delete');


// Manufacturers
Route::get('manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer');
Route::get('manufacturer/create', [ManufacturerController::class, 'create'])->name('manufacturer.create');
Route::post('manufacturer/store', [ManufacturerController::class, 'store'])->name('manufacturer.store');
Route::get('manufacturer/edit/{id}', [ManufacturerController::class, 'edit'])->name('manufacturer.edit');
Route::post('manufacturer/update/{id}', [ManufacturerController::class, 'update'])->name('manufacturer.update');
Route::get('manufacturer/delete/{id}', [ManufacturerController::class, 'destroy'])->name('manufacturer.delete');



// Lessons
Route::get('lesson', [LessonController::class, 'index'])->name('lesson');
Route::get('/lesson/mylesson', [LessonController::class, 'myLesson'])->name('mylesson');
Route::get('lesson/create', [LessonController::class, 'create'])->name('lesson.create');
Route::post('lesson/store', [LessonController::class, 'store'])->name('lesson.store');
Route::get('lesson/edit/{id}', [LessonController::class, 'edit'])->name('lesson.edit');
Route::post('lesson/update/{id}', [LessonController::class, 'update'])->name('lesson.update');
Route::get('lesson/delete/{id}', [LessonController::class, 'destroy'])->name('lesson.delete');



// Review
Route::get('review', [ReviewController::class, 'index'])->name('review');
Route::get('/review/myreview', [ReviewController::class, 'myReview']);
Route::get('review/create', [ReviewController::class, 'create'])->name('review.create');
Route::post('review/store', [ReviewController::class, 'store'])->name('review.store');
Route::get('review/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
Route::post('review/update/{id}', [ReviewController::class, 'update'])->name('review.update');
Route::post('review/status/{id}', [ReviewController::class, 'status'])->name('review.status');
Route::get('review/delete/{id}', [ReviewController::class, 'destroy'])->name('review.delete');



// Instructors
Route::get('instructor', [InstructorController::class, 'show'])->name('instructor');
Route::get('instructor/create', [InstructorController::class, 'create'])->name('instructor.create');  // available this only for admin
Route::get('/instructor/mycourses', [InstructorController::class, 'myCourses'])->name('instructor.mycourses');
Route::post('instructor/store', [InstructorController::class, 'store'])->name('instructor.store');
Route::get('instructor/edit/{id}', [InstructorController::class, 'edit'])->name('instructor.edit');
Route::post('instructor/update/{id}', [InstructorController::class, 'update'])->name('instructor.update');
Route::get('instructor/delete/{id}', [InstructorController::class, 'destroy'])->name('instructor.delete');  


