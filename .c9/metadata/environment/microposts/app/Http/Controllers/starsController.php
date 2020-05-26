{"filter":false,"title":"starsController.php","tooltip":"/microposts/app/Http/Controllers/starsController.php","undoManager":{"mark":14,"position":14,"stack":[[{"start":{"row":44,"column":0},"end":{"row":57,"column":5},"action":"remove","lines":["    public function followings($id)","    {","        $user = User::find($id);","        $followings = $user->followings()->paginate(10);","","        $data = [","            'user' => $user,","            'users' => $followings,","        ];","","        $data += $this->counts($user);","","        return view('users.followings', $data);","    }"],"id":2},{"start":{"row":43,"column":0},"end":{"row":44,"column":0},"action":"remove","lines":["",""]},{"start":{"row":42,"column":0},"end":{"row":43,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":61,"column":1},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\User;","use App\\Micropost; // 追加","","class UsersController extends Controller","{","    public function index()","    {","        $users = User::paginate(1);","","        return view('users.index', [","            'users' => $users,","        ]);","    }","    ","    public function show($id)","    {","        ","        $user = User::find($id);","        ","","        ","        //$microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","        $microposts = $user->feed_microposts()->orderBy('created_at', 'desc')->paginate(10);","        ","","","","        $data = [","            'user' => $user,","            'microposts' => $microposts,","        ];","","        $data += $this->counts($user);","","        return view('users.show', $data);","    }","","","    public function followers($id)","    {","        $user = User::find($id);","        $followers = $user->followers()->paginate(10);","","        $data = [","            'user' => $user,","            'users' => $followers,","        ];","","        $data += $this->counts($user);","","        return view('users.followers', $data);","    }","","","","}"],"id":3},{"start":{"row":0,"column":0},"end":{"row":19,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class UserFollowController extends Controller","{","    public function store(Request $request, $id)","    {","        \\Auth::user()->follow($id);","        return redirect()->back();","    }","","    public function destroy($id)","    {","        \\Auth::user()->unfollow($id);","        return redirect()->back();","    }","}"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["w"],"id":4},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["o"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["l"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["l"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":["o"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"remove","lines":["F"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["r"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"remove","lines":["e"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["s"]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["U"],"id":5}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["s"],"id":6},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["t"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["r"],"id":7}],[{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["s"],"id":8}],[{"start":{"row":8,"column":46},"end":{"row":8,"column":47},"action":"remove","lines":["d"],"id":9},{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"remove","lines":["i"]}],[{"start":{"row":8,"column":45},"end":{"row":8,"column":54},"action":"insert","lines":["micropost"],"id":10}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"remove","lines":["d"],"id":11},{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"remove","lines":["i"]}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":40},"action":"insert","lines":["micropost"],"id":12}],[{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"remove","lines":["d"],"id":13},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"remove","lines":["i"]}],[{"start":{"row":14,"column":29},"end":{"row":14,"column":38},"action":"insert","lines":["micropost"],"id":14}],[{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"remove","lines":["d"],"id":15},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"remove","lines":["i"]}],[{"start":{"row":16,"column":33},"end":{"row":16,"column":42},"action":"insert","lines":["micropost"],"id":16}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":29},"end":{"row":14,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1590066735224,"hash":"035f2adb43d07543eee79cf87d940ea0f942ba60"}