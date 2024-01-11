<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{

    // index
    public function index()
    {
        return view('welcome', ['listItems' => ListItem::where('is_completed', 0)->get()]);
    }

    // markComplete
    public function markComplete($id)
    {
        $listItem = ListItem::find($id);
        $listItem->is_completed = 1;
        $listItem->save();
        return redirect('/');
    }

    // saveItem
    public function saveItem(Request $request)
    {
        $validatedData = $request->validate([
            'listItem' => 'required|max:255',
        ]);

        $newListItem = new ListItem();
        // Laravel's e function further protects your application from cross-site scripting (XSS) attacks.
        $newListItem->name = e($request->listItem);
        $newListItem->is_completed = 0;
        $newListItem->save();

        return redirect('/');
    }
}
