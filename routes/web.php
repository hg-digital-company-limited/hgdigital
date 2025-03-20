<?php

use App\Livewire\Blog;
use App\Livewire\Blogs;
use App\Livewire\Home;
use App\Livewire\Page404;
use App\Livewire\Project;
use App\Livewire\ProjectDetail;
use App\Livewire\Projects;
use App\Livewire\Service;
use App\Livewire\Services;
use App\Livewire\TeamMember;
use App\Livewire\TeamMembers;
use Illuminate\Support\Facades\Route;
use App\Livewire\About;
use App\Livewire\Contact;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');


Route::get('/blogs', action: Blogs::class)->name('blogs');
Route::get('/blog/{slug}', action: Blog::class)->name('blog');


Route::get('/services', action: Services::class)->name('services');
Route::get('/service/{slug}', action: Service::class)->name('service');

Route::get('/projects', action: Projects::class)->name('projects');
Route::get('/project-detail/{slug}', action: Project::class)->name('project');

Route::get('/404', Page404::class)->name('404');
Route::get('/team-member/{slug}', action: TeamMember::class)->name('team-member');
Route::get('/team-members', action: TeamMembers::class)->name('team-members');

