<header class="mb-4">
   <nav class="navbar navbar-expands-sm navbar-dark bg-info">
      <a class="navbar-brand" href="/">TASK List</a>
      
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
         <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="nav-bar">
         <ul class="navbar-nav mr-auto"></ul>
         <ul class="navbar-nav">
            @if (Auth::check())
               <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-success']) !!}</li>
               <li class="nav-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
            @else
               <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
               <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
            @endif
         </ul>
      </div>
   </nav>
</header>