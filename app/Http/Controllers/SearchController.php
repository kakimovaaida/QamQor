<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Type;
use App\Models\TypeCat;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Поиск по услугам
        $services = Service::where('service_name', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        // Поиск по категориям
        $categories = Category::where('Name', 'like', "%{$query}%")->get();

        // Поиск по типам
        $types = Type::where('name', 'like', "%{$query}%")->get();

        // Поиск по категориям типов
        $typeCats = TypeCat::where('name', 'like', "%{$query}%")->get();

        return view('search.results', compact('services', 'categories', 'types', 'typeCats'));
    }
}
