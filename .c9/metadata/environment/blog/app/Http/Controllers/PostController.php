{"filter":false,"title":"PostController.php","tooltip":"/blog/app/Http/Controllers/PostController.php","undoManager":{"mark":26,"position":26,"stack":[[{"start":{"row":12,"column":79},"end":{"row":12,"column":80},"action":"remove","lines":["1"],"id":1}],[{"start":{"row":29,"column":47},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":30,"column":0},"end":{"row":30,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"remove","lines":["    "],"id":3},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "]},{"start":{"row":29,"column":47},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":30,"column":5},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":4},"end":{"row":34,"column":1},"action":"insert","lines":["public function edit(Post $post)","{","    return view('posts/edit')->with(['post' => $post]);","}"],"id":5}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":8},"action":"insert","lines":["    "],"id":6}],[{"start":{"row":12,"column":79},"end":{"row":12,"column":80},"action":"insert","lines":["5"],"id":7}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "],"id":8}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":34,"column":5},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":4},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":30,"column":5},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":37,"column":4},"end":{"row":43,"column":1},"action":"insert","lines":["public function update(PostRequest $request, Post $post)","{","    $input_post = $request['post'];","    $post->fill($input_post)->save();","","    return redirect('/posts/' . $post->id);","}"],"id":13}],[{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "],"id":14}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":15}],[{"start":{"row":40,"column":37},"end":{"row":41,"column":0},"action":"remove","lines":["",""],"id":16}],[{"start":{"row":42,"column":5},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":43,"column":4},"end":{"row":44,"column":0},"action":"insert","lines":["",""]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":44,"column":4},"end":{"row":48,"column":1},"action":"insert","lines":["public function delete(Post $post)","{","    $post->delete();","    return redirect('/');","}"],"id":18}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":1},"action":"insert","lines":[" "],"id":19},{"start":{"row":45,"column":1},"end":{"row":45,"column":2},"action":"insert","lines":[" "]},{"start":{"row":45,"column":2},"end":{"row":45,"column":3},"action":"insert","lines":[" "]},{"start":{"row":45,"column":3},"end":{"row":45,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":48,"column":0},"end":{"row":48,"column":1},"action":"insert","lines":[" "],"id":20},{"start":{"row":48,"column":1},"end":{"row":48,"column":2},"action":"insert","lines":[" "]},{"start":{"row":48,"column":2},"end":{"row":48,"column":3},"action":"insert","lines":[" "]},{"start":{"row":48,"column":3},"end":{"row":48,"column":4},"action":"insert","lines":[" "]},{"start":{"row":48,"column":4},"end":{"row":48,"column":5},"action":"insert","lines":[" "]}],[{"start":{"row":48,"column":4},"end":{"row":48,"column":5},"action":"remove","lines":[" "],"id":21}],[{"start":{"row":39,"column":4},"end":{"row":39,"column":8},"action":"insert","lines":["    "],"id":22}],[{"start":{"row":40,"column":4},"end":{"row":40,"column":8},"action":"insert","lines":["    "],"id":23}],[{"start":{"row":41,"column":4},"end":{"row":41,"column":8},"action":"insert","lines":["    "],"id":24}],[{"start":{"row":46,"column":3},"end":{"row":46,"column":4},"action":"insert","lines":[" "],"id":25}],[{"start":{"row":46,"column":5},"end":{"row":46,"column":8},"action":"insert","lines":["   "],"id":26}],[{"start":{"row":47,"column":4},"end":{"row":47,"column":8},"action":"insert","lines":["    "],"id":27}]]},"ace":{"folds":[],"scrolltop":289.3333435058594,"scrollleft":0,"selection":{"start":{"row":47,"column":8},"end":{"row":47,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1676259937626,"hash":"26bacfe5b251890dea118c485127e2a0cc99a53f"}