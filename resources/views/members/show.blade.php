<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<body>
<div class="top-right links">
    <a href="/">Home</a>
    <a href="/members">MembersTables</a>
    <a href="/talents">TalentTables</a>
    <a href="/contact">Contact</a>
</div>



<h1>Members</h1>

    <ul>
            <p><strong>Name:</strong>{{$member->name}}</p>
            <p><strong>Email:</strong>{{$member->email}}</p>
            <p><strong>Location:</strong>{{$member->location}}</p>
            <p><a href="{{$member->id}}/edit">Edit Member</a> </p>

            <form action="/members/{{$member->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
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