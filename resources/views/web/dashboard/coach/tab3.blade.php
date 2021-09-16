<div class="tab-pane fade " id="pills-Friends" role="tabpanel" aria-labelledby="pills-Friends-tab">
    <div class="userTableCustom mt6">
        <table>
                <tr>
                    <th>
                        Players
                    </th>
                </tr>
                @foreach ($user->coachFriend as $item )
                <tr>
                    <td>
                        <a href="{{route('chat',$item->id)}}" style="    color: #5f5f5f;text-decoration: none;">
                            {{$item->name}}
                        </a>
                    </td>

                </tr>
                @endforeach

                </table>
    </div>
</div>
