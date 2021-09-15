<div class="tab-pane fade " id="pills-Friends" role="tabpanel" aria-labelledby="pills-Friends-tab">
    <div class="userTableCustom mt6">
        <!-- <h1 class="mb4 d-flex justify-content-between align-items-center"> -->
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
        <!-- </h1> -->
    </div>
</div>
