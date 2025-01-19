<x-app-layout>
    <x-slot name="index" >
        active
    </x-slot>
    @if(Session::has('success'))
    <div  class="alert alert-success" role="alert" >
        <strong>{{Session::get('success')}}</strong>
    </div>
    @endif

    @if(Session::has('error'))
    <div  class="alert alert-danger" role="alert" >
        <strong>{{Session::get('error')}}</strong>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table  class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Personne</th>
                            <th scope="col">Ajouter par</th>
                            <th scope="col">Ajouter le</th>
                            <th>Voir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peoples as $people)
                        <tr>
                            <td>{{$people->first_name}} {{$people->last_name}}</td>
                            <td>{{$people->user->pseudo ?? '--' }}</td>
                            <td>{{$people->created_at }}</td>
                            <td>
                                <a href="{{route('show_people',encrypt($people->id))}}">Voir</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
