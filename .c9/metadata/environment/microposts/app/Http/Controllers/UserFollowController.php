{"filter":false,"title":"UserFollowController.php","tooltip":"/microposts/app/Http/Controllers/UserFollowController.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":1},"end":{"row":19,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"96e4d476d0ea02606e3207320b046acc361233c6","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":6,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["class UserFollowController extends Controller","{","    //","}",""],"id":2},{"start":{"row":6,"column":0},"end":{"row":19,"column":1},"action":"insert","lines":["class UserFollowController extends Controller","{","    public function store(Request $request, $id)","    {","        \\Auth::user()->follow($id);","        return redirect()->back();","    }","","    public function destroy($id)","    {","        \\Auth::user()->unfollow($id);","        return redirect()->back();","    }","}"]}]]},"timestamp":1589968171797}