<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Permissões: {{ $db->CompanyEstablishment->title}} - {{ $db->department }}" 
            routeBack="{{ route('pharmacy_permissions.index') }}"
        />
    @endslot

    <!-- Slot Body -->
    @slot('body')

        <x-conteiner>
            <div>
                <x-form.form method="create" route="{{route('pharmacy_permissions.store')}}">
                    <input type="hidden" name="establishment_department_id" value="{{$db->id}}">
                
                    <x-form.select col="12" label="Usuário" id="user_id" name="user_id">
                        @foreach ($dbUsers as $dbUser)
                            <option value="{{$dbUser->id}}">
                                {{$dbUser->name}} 
                            </option>                           
                        @endforeach
                    </x-form.select>
                </x-form.form>
            </div>
        </x-conteiner>

        <hr>
        
        <div class="mt-3">
            <x-table.table>

                @slot('thead')
                    <x-table.th>Nome do usuários</x-table.th>
                    <x-table.th>Email do usuários</x-table.th>
                    <x-table.th class="w-40"></x-table.th>
                @endslot

                @slot('tbody')
                    @foreach ($dbLinkedUsers as $dbLinkedUser)
                        <x-table.tr>
                            <x-table.td>{{$dbLinkedUser->User->name}}</x-table.td>
                            <x-table.td>{{$dbLinkedUser->User->email}}</x-table.td>
                            <x-table.td>
                                <x-button.minButtonDelete route="{{route('pharmacy_permissions.destroy',['pharmacy_permission'=>$dbLinkedUser->id])}}" />
                            </x-table.td>
                        </x-table.tr>
                    @endforeach
                @endslot    

            </x-table.table>
        </div>

    @endslot
</x-pages.index>