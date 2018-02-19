<!-- chhivorn to it  -->
<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Contect</th>
            <th>Branch</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach($user as $u)
        {{$u->name}}
        <tr>
            <td>{{$no++}}</td>
            <td><img src='{{asset("userimage/$u->photo")}}' alt="" srcset="" height="35" width="35" style="border-radius:20px; border:1px solid blue; padding:2px"></td>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->tel}}</td>
            <td>{{($u->branch_id)?$u->branch->name:""}}</td>
            <td>
                <a href="{{route('user.edit',$u->id)}}" class=""><i class="fa fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

