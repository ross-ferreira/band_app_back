<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<div class="top-right links">
    <a href="/">Home</a>
    <a href="/members">MembersTables</a>
    <a href="/talents">TalentTables</a>
</div>



<h1>Contact</h1>

@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
    {{session()->get('message')}}
    </div> 
@endif
    <form action="/contact" method="POST" class="pb-5">
        <label>Name</label>
        <div class="form-group">
            <input type="text" name="name" value="{{old('name')}}" >
            <!-- using value old to keep previous value if error issue with submission -->
        </div>
        <label>Email</label>
        <div class="form-group">
            <input type="text" name="email" value="{{old('email')}}" >
        </div>
        <label>Message</label>
        <div class="form-group">
            <textarea type="text" name="message" value="{{old('message')}}" ></textarea>
        </div>
        <!-- provide feedback if input error -->
            <div>{{$errors->first('name')}}</div>
            <div>{{$errors->first('email')}}</div>
            <div>{{$errors->first('message')}}</div>
         <!-- provide feedback if input error -->
        <button className="btn btn-primary" type="submit">Submit</button>
        @csrf
    </form>

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