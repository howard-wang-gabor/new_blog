<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <table border="1">
            <tr>
                <td><strong>id</strong></td>
                <td><strong>title</strong></td>
                <td><strong>content</strong></td>
                <td><strong>tag</strong></td>
            </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['content']}}</td>
                <td>{{$post['tag']}}</td>
            </tr>
        @endforeach
        </table>
        
    </body>

    