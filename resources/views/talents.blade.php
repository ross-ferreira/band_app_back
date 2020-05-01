<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<body>
<div class="top-right links">
    <a href="/">Home</a>
    <a href="/members">MembersTables</a>
</div>

<h1>Talents Table</h1>
    <form action="talents" method="post" class="pb-5">
        <label>Talent Name</label>
        <div class="input-group">
            <input type="text" name="talent_name" value="{{old('talent_name')}}" >
            <!-- using value old to keep previous value if error issue with submission -->
        </div>
        <label>Skill Level</label>
        <div class="input-group">
            <input type="number" name="skill_level" value="{{old('skill_level')}}" >
        </div>
        <label>Member ID</label>
        <div class="input-group">
            <input type="number" name="member_id" value="{{old('member_id')}}" >
        </div>
        <!-- provide feedback if input error -->
            <div>{{$errors->first('talent_name')}}</div>
            <div>{{$errors->first('skill_level')}}</div>
            <div>{{$errors->first('member_id')}}</div>
         <!-- provide feedback if input error -->
        <button className="btn" type="submit">Add Talent</button>
        @csrf
    </form>



    <ul>
        @foreach ($talents as $talent)
            <li>{{$talent->talent_name}}  <span class="text-muted">-{{$talent->skill_level}}</span> <span class="text-muted">({{$members[($talent->member_id - 1)]->name}})</span> </li>
        @endforeach
    </ul>
</body>







<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>    