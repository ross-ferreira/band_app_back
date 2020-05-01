<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<body>
<div class="top-right links">
    <a href="/">Home</a>
    <a href="/talents">TalentTables</a>
</div>

<h1>Create Member(using create())</h1>
    <form action="/members" method="post" class="pb-5">
        <label>Account Type</label>
            <div class="input-group">
                <input type="text" name="account_type" value="{{old('account_type')}}" >
                <!-- using value old to keep previous value if error issue with submission -->
            </div>
        <label>Name</label>
        <div class="input-group">
            <input type="text" name="name" value="{{old('name')}}" >
            <!-- using value old to keep previous value if error issue with submission -->
        </div>
        <label>Email</label>
        <div class="input-group">
            <input type="text" name="email" value="{{old('email')}}" >
        </div>
        <label>DOB</label>
        <div class="input-group">
            <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}" >
        </div>
        <label>Gender</label>
        <div class="input-group">
            <input type="text" name="gender" value="{{old('gender')}}" >
        </div>
        <label>Distance</label>
        <div class="input-group">
            <input type="number" name="distance" value="{{old('distance')}}" >
        </div>
        <label>Location</label>
        <div class="input-group">
            <input type="text" name="location" value="{{old('location')}}" >
        </div>
        <label>Band Type</label>
        <div class="input-group">
            <input type="text" name="band_type" value="{{old('band_type')}}" >
        </div>
        <label>Gender Preference</label>
        <div class="input-group">
            <input type="text" name="gender_pref" value="{{old('gender_pref')}}" >
        </div>
        <label>About Me</label>
        <div class="input-group">
            <input type="text" name="about_me" value="{{old('about_me')}}" >
        </div>
        <!-- provide feedback if input error -->
            <div>{{$errors->first('account_type')}}</div>
            <div>{{$errors->first('name')}}</div>
            <div>{{$errors->first('email')}}</div>
            <div>{{$errors->first('date_of_birth')}}</div>
            <div>{{$errors->first('gender')}}</div>
            <div>{{$errors->first('distance')}}</div>
            <div>{{$errors->first('location')}}</div>
            <div>{{$errors->first('band_type')}}</div>
            <div>{{$errors->first('gender_pref')}}</div>
            <div>{{$errors->first('about_me')}}</div>
         <!-- provide feedback if input error -->
        <button className="btn" type="submit">Add Member</button>
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