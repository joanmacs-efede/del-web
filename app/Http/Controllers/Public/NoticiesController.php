<?php
namespace App\Http\Controllers\Public;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class NoticiesController extends Controller {
    public function index() { return Inertia::render('Public/Noticies'); }
}
