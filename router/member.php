<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./router/assets/css/member.css" >
    <title><?php echo $title;?></title>
</head>
<body>
    <input type="submit" value="新增">
    <input type="submit" value="刪除">
    <input type="submit" value="名字排序">
    <input type="submit" value="帳號排序">
    <div>
        <select name="name" style="width:100px;" required>
            　<option value="name" disabled>會員名稱</option>
            </select>
            <select name="username" style="width:100px;" required>
                　<option value="username" disabled>帳號</option>
            </select>
        <input type="submit" value="查詢">
    </div>
    <table border="1" >
        <thead>
            <tr>
                <th width="20px">
                    <input type="checkbox">
                </th>
                <th width="100px">
                    名稱
                </th>
                <th width="100px">
                    帳號
                </th>
                <th width="200px">
                    密碼
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>
                    <input type="text" style="width: 200px;">
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>