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
        <tr>
            <td>{{$no++}}</td>
            <td>{{$no++}}</td>
            <td>{{$no++}}</td>
            <td>{{$no++}}</td>
            <td>{{$no++}}</td>
            <td>{{$no++}}</td>
            <td>{{$no++}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

