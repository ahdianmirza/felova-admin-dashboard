@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Manual</h1>

                    @foreach ($manual_data as $data)
                        <ul>
                            <li>{{ $data['device'] }}</li>
                            <li>{{ $data['pompa'] }}</li>
                            <li>{{ $data['sol_1'] }}</li>
                            <li>{{ $data['sol_2'] }}</li>
                            <li>{{ $data['sol_3'] }}</li>
                            <li>{{ $data['sol_4'] }}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
