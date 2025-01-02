<?php

use App\Http\Controllers\Backend\AdvertiseImageController;
use App\Http\Controllers\Backend\AutoEmailLogController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\RatingTemplateController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\WellnessCategoryController;
use App\Http\Controllers\Backend\WellnessCategorySessionController;
use App\Http\Controllers\Backend\CategorySessionController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DocumentListingController;
use App\Http\Controllers\Backend\ForumController;
use App\Http\Controllers\Backend\IndustryController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\XmlFeedController;
use Illuminate\Support\Facades\Route;

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('blogs', BlogController::class);
Route::resource('review-template', RatingTemplateController::class);
Route::post('copy-template/{id}', [RatingTemplateController::class, 'copyTemplate'])->name('review-template.copy');
Route::get('blog/comments/{id}', [BlogController::class, 'blogComment'])->name('blog.comment');
Route::delete('blog/comment/delete/{id}', [CommentController::class, 'deleteComment'])->name('delete.comment');
Route::get('blog/comment/approval/{id}', [CommentController::class, 'approvalComment'])->name('approval.comment');
Route::resource('forums', ForumController::class);
Route::get('forums/details/{id}', [ForumController::class, 'details'])->name('forum.details');
Route::delete('forums/reply/delete/{id}', [ForumController::class, 'deleteReply'])->name('forum.reply.delete');

Route::resource('industries', IndustryController::class);
Route::resource('companies', CompanyController::class);
Route::resource('services', ServiceController::class);
Route::resource('pages', PageController::class);

Route::get('auto-email-logs', [AutoEmailLogController::class, 'autoEmailLogs'])->name('autoEmailLogs');
Route::match(['get', 'post'], 'export/{type?}', [AutoEmailLogController::class, 'export'])->name('exportAutoLogs');

Route::resource('learning-center/categories', CategoryController::class);
Route::get('learning-center/category/activation/{id}', [CategoryController::class, 'deactivate'])->name('category.deactivate');

Route::resource('wellness/wellness_categories', WellnessCategoryController::class);
Route::get('wellness/category/activation/{id}', [WellnessCategoryController::class, 'deactivate'])->name('wellness.deactivate');
Route::resource('wellness/wellness_sessions', WellnessCategorySessionController::class);
Route::get('wellness/sessions/create/{id}', [WellnessCategorySessionController::class, 'create'])->name('wellnesssessionCreate');
Route::get('wellness/session/activation/{id}', [WellnessCategorySessionController::class, 'deactivate'])->name('wellnesssession.deactivate');
Route::post('wellness/wellness_sessionssave', [WellnessCategorySessionController::class, 'saveSession'])->name('wellness_sessions.save');
Route::get('wellness/catgegory/{id}/sessions/', [WellnessCategorySessionController::class, 'index'])->name('wellness_category.session');

Route::resource('learning-center/sessions', CategorySessionController::class);
Route::get('learning-center/session/activation/{id}', [CategorySessionController::class, 'deactivate'])->name('session.deactivate');
Route::get('learning-center/sessions/create/{id}', [CategorySessionController::class, 'create'])->name('sessionCreate');
Route::post('learning-center/saveSession', [CategorySessionController::class, 'saveSession'])->name('sessions.save');
Route::get('learning-center/catgegory/{id}/sessions/', [CategorySessionController::class, 'index'])->name('category.session');

Route::resource('document-listing', DocumentListingController::class);
Route::resource('advertise-images', AdvertiseImageController::class);
Route::resource('learning-centers', LearningCenterController::class);

//xml feed
Route::get('xml-feed/create', [XmlFeedController::class, 'create'])->name('xmlFeedCreate');
Route::get('xml-feed/{id}/edit', [XmlFeedController::class, 'edit'])->name('xmlFeedEdit');
Route::post('xml-feed/store', [XmlFeedController::class, 'store'])->name('xmlFeedStore');
Route::post('xml-feed/update', [XmlFeedController::class, 'update'])->name('xmlFeedUpdate');
Route::get('xml-feed/users', [XmlFeedController::class, 'index'])->name('xmlFeedIndex');
Route::get('xml-feed/activation/{id}', [XmlFeedController::class, 'activation'])->name('xmlUserActivation');
Route::get('xmlfeed/delete/{id}', [XmlFeedController::class, 'delete'])->name('xmlFeedDelete');
