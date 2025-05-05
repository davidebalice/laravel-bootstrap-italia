@extends('components.layouts.app-layout')

@section('title', 'Home')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("test login") }}


                        <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                  <th scope="col">Intestazione</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                  <td>Cella</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection