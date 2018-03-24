<div class="profile2">

    <div class="image">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        {{--<img src="http://100dayscss.com/codepen/jessica-potter.jpg" width="70" height="70" alt="Jessica Potter">--}}
        <img src="/storage/uploads/{{ App\User::find($id)->avatar }}" width="70" height="70" alt="/storage/uploads/{{ App\User::find($id)->avatar }}">
    </div>

    <div class="name">Login</div>
    <div class="job">Name Surname</div>
    <div class="description">
        Tutaj opis tego profilu.
    </div>

    <div class="actions">
        <button class="btn">Obserwuj</button>
        <button class="btn">Wiadomość</button>
    </div>


</div>

<div class="stats2">
    <div class="col box">
        <span class="value">523</span>
        <span class="parameter">Posts</span>
    </div>

    <div class="col box">
        <span class="value">1387</span>
        <span class="parameter">Follower</span>
    </div>

    <div class="col box">
        <span class="value">146</span>
        <span class="parameter">Following</span>
    </div>
</div>