<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<body>
<div class="top-right links">
    <a href="/">Home</a>
    <a href="/talents">TalentTables</a>
    <a href="/contact">Contact</a>
</div>



<h1>Members Table</h1>
<p><a href="members/create">Create Member</a></p>

    <ul>
        @foreach ($members as $member)
            <li><a href="/members/{{$member->id}}">{{$member->id}}</a>{{$member->name}} <span class="text-muted">({{$member->email}})</span></li>
        @endforeach
    </ul>
    <h2>Bristol Members-(using filter)</h2>
    <ul>
        @foreach ($bristolMembers as $bristolMember)
            <li>{{$bristolMember->name}} <span class="text-muted">({{$bristolMember->email}})</span></li>
        @endforeach
    </ul>

    <h2>Members and their Talents-(checking relationships)</h2>
    <ul>
        @foreach ($members as $member)
            @foreach ($member->talents as $talent)
                <li> {{$member->name}} - <span class="text-muted">{{$talent->talent_name}}</span></li>
            @endforeach
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