
    <h1>Data to be Sorted for Tables</h1>
    <form action="members" method="post" class="pb-5">
        <label>Name</label>
        <div class="input-group">
            <input type="text" name="name"> 
        </div>
        <label>Email</label>
        <div class="input-group">
            <input type="text" name="email"> 
        </div>
        <label>Password</label>
        <div class="input-group">
            <input type="text" name="password"> 
        </div>
        <label>DOB</label>
        <div class="input-group">
            <input type="date" name="date_of_birth"> 
        </div>
        <label>Gender</label>
        <div class="input-group">
            <input type="text" name="gender"> 
        </div>
        <label>Distance</label>
        <div class="input-group">
            <input type="number" name="distance"> 
        </div>
        <label>Location</label>
        <div class="input-group">
            <input type="text" name="location"> 
        </div>
        <label>Band Type</label>
        <div class="input-group">
            <input type="text" name="band_type"> 
        </div>
        <label>Gender Preference</label>
        <div class="input-group">
            <input type="text" name="gender_pref"> 
        </div>
        <label>About Me</label>
        <div class="input-group">
            <input type="text" name="about_me"> 
        </div>


        <button type="submit">Add Member</button>
        @csrf
    </form>
    <ul>
        @foreach ($members as $member)
            <li>{{$member->name}}</li>
        @endforeach
    </ul>


