@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="timeline">
        <div class="col-md-4">
            <form action="#" v-on:submit="postStatus">
                <div class="form-group">
                    <textarea class="form-control" rows="5" maxlength="140" placeholder="Write a status?" required v-model="post"></textarea>
                </div>
                <input type="submit" value="Post" class="form-control">
            </form>
        </div>
        <div class="col-md-8">
            timeline
        </div>
    </div>
</div>
@endsection
