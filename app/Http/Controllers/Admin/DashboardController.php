<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\PortfolioItem;
use App\Models\SkillItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blogCount = Blog::count();
        $skilCount = SkillItem::count();
        $portfolioCount = PortfolioItem::count();
        $feedbackCount = Feedback::count();
        return view('admin.dashboard', compact('blogCount', 'skilCount', 'portfolioCount', 'feedbackCount'));
    }
}
