@extends('templates.layout')

@section('content')
    <div class="card-body" style="margin-top: 80px">
        <table class="table table-bordered border-dark ">
            <thead class="table-secondary fs-4 text text-center">
                <tr>
                    <th scope="col">Course</th>
                    <th scope="col">Type</th>
                    <th scope="col">Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matematika</td>
                    <td>Diskrit</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>Aljabar Linear</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Basis Data</td>
                    <td>DDL</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Bhs Inggris</td>
                    <td>Speaker</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
