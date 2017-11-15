
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->firstname }}</td>
        <td>{{ $user->email }}</td>
        <td><select id ="edit" name="edit"  onchange="upDateRole(this,{{$user->id}})">


            @foreach($listrole as $role)
                @if($user->role->name == $role->name)
                <option selected>{{$role->name}}</option>
                    @else
                    <option>{{$role->name}}</option>
                    @endif
                @endforeach


            </select></td>

        <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('user-destroy', [$user->id]) }}" role="button" title="@lang('Destroy')">X<span class="fa fa-remove"></span></a></td>
    </tr>

@endforeach
    <script>
        function upDateRole(idRole,idUser){

            console.log("roleid="+idRole+"uid="+idUser);
            idRole=idRole['value'];
            console.log("roleid="+idRole+"uid="+idUser);
            $.ajax({

                url :'upDateRole',
                type: 'GET',
                data:{id:idUser,rolename:idRole},
                dataType:'html',

                success:function(response)
                {
                    alert('Mise à jour du role');
                    console.log('upDateRole ok id:' + response);
                    location.reload();
                },
                error: function (xhr,b,c)
                {
                    console.log("xhr="+xhr+"b="+b+"c="+c);
                }
            })
        }



    </script>