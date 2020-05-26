{"filter":false,"title":"stars.blade.php","tooltip":"/microposts/resources/views/users/stars.blade.php","undoManager":{"mark":38,"position":38,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_follow.follow_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_follow.follow_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"]}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"remove","lines":["w"],"id":3},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"remove","lines":["o"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"remove","lines":["l"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"remove","lines":["l"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["o"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["f"]}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["s"],"id":4},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["t"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["e"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"remove","lines":["e"],"id":5}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["a"],"id":6}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["w"],"id":7},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"remove","lines":["o"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"remove","lines":["l"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["l"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"remove","lines":["o"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"remove","lines":["f"]}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["s"],"id":8},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["t"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["a"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":237},"end":{"row":19,"column":233},"action":"remove","lines":["","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>"],"id":9}],[{"start":{"row":19,"column":5},"end":{"row":20,"column":6},"action":"insert","lines":["           <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","      "],"id":12}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "],"id":14}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":8},"action":"insert","lines":["    "],"id":15}],[{"start":{"row":19,"column":8},"end":{"row":19,"column":12},"action":"insert","lines":["    "],"id":16}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":16},"action":"insert","lines":["    "],"id":17}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":20},"action":"insert","lines":["    "],"id":18}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":20},"action":"remove","lines":["    "],"id":19}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["{"],"id":20},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["{"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["}"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["}"]}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["-"],"id":21},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["-"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["-"]},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["-"]}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["あ"],"id":22}],[{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"remove","lines":["}"],"id":23}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["{"],"id":24}],[{"start":{"row":19,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["                {--あ--}","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>",""],"id":25}],[{"start":{"row":18,"column":80},"end":{"row":18,"column":81},"action":"remove","lines":["s"],"id":26},{"start":{"row":18,"column":79},"end":{"row":18,"column":80},"action":"remove","lines":["g"]},{"start":{"row":18,"column":78},"end":{"row":18,"column":79},"action":"remove","lines":["n"]},{"start":{"row":18,"column":77},"end":{"row":18,"column":78},"action":"remove","lines":["i"]},{"start":{"row":18,"column":76},"end":{"row":18,"column":77},"action":"remove","lines":["w"]},{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"remove","lines":["o"]},{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"remove","lines":["l"]},{"start":{"row":18,"column":73},"end":{"row":18,"column":74},"action":"remove","lines":["l"]},{"start":{"row":18,"column":72},"end":{"row":18,"column":73},"action":"remove","lines":["o"]},{"start":{"row":18,"column":71},"end":{"row":18,"column":72},"action":"remove","lines":["f"]}],[{"start":{"row":18,"column":71},"end":{"row":18,"column":72},"action":"insert","lines":["s"],"id":27},{"start":{"row":18,"column":72},"end":{"row":18,"column":73},"action":"insert","lines":["t"]},{"start":{"row":18,"column":73},"end":{"row":18,"column":74},"action":"insert","lines":["a"]},{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":132},"end":{"row":18,"column":133},"action":"remove","lines":["s"],"id":28},{"start":{"row":18,"column":131},"end":{"row":18,"column":132},"action":"remove","lines":["g"]},{"start":{"row":18,"column":130},"end":{"row":18,"column":131},"action":"remove","lines":["n"]},{"start":{"row":18,"column":129},"end":{"row":18,"column":130},"action":"remove","lines":["i"]},{"start":{"row":18,"column":128},"end":{"row":18,"column":129},"action":"remove","lines":["w"]},{"start":{"row":18,"column":127},"end":{"row":18,"column":128},"action":"remove","lines":["o"]},{"start":{"row":18,"column":126},"end":{"row":18,"column":127},"action":"remove","lines":["l"]},{"start":{"row":18,"column":125},"end":{"row":18,"column":126},"action":"remove","lines":["l"]},{"start":{"row":18,"column":124},"end":{"row":18,"column":125},"action":"remove","lines":["o"]},{"start":{"row":18,"column":123},"end":{"row":18,"column":124},"action":"remove","lines":["f"]}],[{"start":{"row":18,"column":123},"end":{"row":18,"column":124},"action":"insert","lines":["s"],"id":29},{"start":{"row":18,"column":124},"end":{"row":18,"column":125},"action":"insert","lines":["t"]},{"start":{"row":18,"column":125},"end":{"row":18,"column":126},"action":"insert","lines":["a"]},{"start":{"row":18,"column":126},"end":{"row":18,"column":127},"action":"insert","lines":["r"]},{"start":{"row":18,"column":127},"end":{"row":18,"column":128},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"insert","lines":["s"],"id":30}],[{"start":{"row":18,"column":166},"end":{"row":18,"column":167},"action":"remove","lines":["s"],"id":31},{"start":{"row":18,"column":165},"end":{"row":18,"column":166},"action":"remove","lines":["g"]},{"start":{"row":18,"column":164},"end":{"row":18,"column":165},"action":"remove","lines":["n"]},{"start":{"row":18,"column":163},"end":{"row":18,"column":164},"action":"remove","lines":["i"]},{"start":{"row":18,"column":162},"end":{"row":18,"column":163},"action":"remove","lines":["w"]},{"start":{"row":18,"column":161},"end":{"row":18,"column":162},"action":"remove","lines":["o"]},{"start":{"row":18,"column":160},"end":{"row":18,"column":161},"action":"remove","lines":["l"]},{"start":{"row":18,"column":159},"end":{"row":18,"column":160},"action":"remove","lines":["l"]},{"start":{"row":18,"column":158},"end":{"row":18,"column":159},"action":"remove","lines":["o"]},{"start":{"row":18,"column":157},"end":{"row":18,"column":158},"action":"remove","lines":["F"]}],[{"start":{"row":18,"column":157},"end":{"row":18,"column":158},"action":"insert","lines":["s"],"id":32},{"start":{"row":18,"column":158},"end":{"row":18,"column":159},"action":"insert","lines":["a"]}],[{"start":{"row":18,"column":158},"end":{"row":18,"column":159},"action":"remove","lines":["a"],"id":33}],[{"start":{"row":18,"column":158},"end":{"row":18,"column":159},"action":"insert","lines":["t"],"id":34},{"start":{"row":18,"column":159},"end":{"row":18,"column":160},"action":"insert","lines":["a"]},{"start":{"row":18,"column":160},"end":{"row":18,"column":161},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":200},"end":{"row":18,"column":201},"action":"remove","lines":["g"],"id":35},{"start":{"row":18,"column":199},"end":{"row":18,"column":200},"action":"remove","lines":["n"]},{"start":{"row":18,"column":198},"end":{"row":18,"column":199},"action":"remove","lines":["i"]},{"start":{"row":18,"column":197},"end":{"row":18,"column":198},"action":"remove","lines":["w"]},{"start":{"row":18,"column":196},"end":{"row":18,"column":197},"action":"remove","lines":["o"]},{"start":{"row":18,"column":195},"end":{"row":18,"column":196},"action":"remove","lines":["l"]},{"start":{"row":18,"column":194},"end":{"row":18,"column":195},"action":"remove","lines":["l"]},{"start":{"row":18,"column":193},"end":{"row":18,"column":194},"action":"remove","lines":["o"]},{"start":{"row":18,"column":192},"end":{"row":18,"column":193},"action":"remove","lines":["f"]}],[{"start":{"row":18,"column":192},"end":{"row":18,"column":193},"action":"insert","lines":["s"],"id":36},{"start":{"row":18,"column":193},"end":{"row":18,"column":194},"action":"insert","lines":["t"]},{"start":{"row":18,"column":194},"end":{"row":18,"column":195},"action":"insert","lines":["a"]},{"start":{"row":18,"column":195},"end":{"row":18,"column":196},"action":"insert","lines":["r"]},{"start":{"row":18,"column":196},"end":{"row":18,"column":197},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":196},"end":{"row":18,"column":197},"action":"remove","lines":["s"],"id":37}],[{"start":{"row":18,"column":149},"end":{"row":18,"column":150},"action":"remove","lines":["d"],"id":38},{"start":{"row":18,"column":148},"end":{"row":18,"column":149},"action":"remove","lines":["i"]}],[{"start":{"row":18,"column":148},"end":{"row":18,"column":149},"action":"insert","lines":["s"],"id":39},{"start":{"row":18,"column":149},"end":{"row":18,"column":150},"action":"insert","lines":["t"]},{"start":{"row":18,"column":150},"end":{"row":18,"column":151},"action":"insert","lines":["a"]},{"start":{"row":18,"column":151},"end":{"row":18,"column":152},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":152},"end":{"row":18,"column":153},"action":"insert","lines":["s"],"id":40}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["s"],"id":41}],[{"start":{"row":18,"column":164},"end":{"row":18,"column":165},"action":"insert","lines":["s"],"id":42}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":2},"end":{"row":14,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1590142179928,"hash":"f3aacefb31f0b2be7ece59e94152f9ebe269c453"}