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
            <tr>
                <td>1</td>
                <td>title1</td>
                <td>content1</td>
                <td>tag1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>title2</td>
                <td>content2</td>
                <td>tag2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>title3</td>
                <td>content3</td>
                <td>tag3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>title4</td>
                <td>content4</td>
                <td>tag4</td>
            </tr>
        </table>
        @foreach ($posts as $post)
        {{$post['title']}}
        {{$post['content']}}
        {{$post['tag']}}
        @endforeach
    </body>