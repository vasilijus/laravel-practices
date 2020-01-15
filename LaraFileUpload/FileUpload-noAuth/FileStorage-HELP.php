<?php
 /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $this->validate($request, [
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $article = new Article();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/articles');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $article->image = $name;
      }

      $article->title = $request->get('title');
      $article->category_id = $request->get('category_id');
      // $article->image = str_slug($request->get('image'));
      $article->subtitle = $request->get('subtitle');
      $article->description = $request->get('description');

      $article->save();
      return back()->with('success', 'Your article has been added successfully. Please wait for the admin to approve.');
}
?>