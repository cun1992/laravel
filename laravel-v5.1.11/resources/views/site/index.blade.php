@extends('welcome')

<form action="site_add" method="post">
    <table>
        <tr>
            <td>名字</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>性别</td>
            <td>
                <input type="radio" name="sex"  value="男"/>男
                <input type="radio" name="sex" value="女"/>女
            </td>
        </tr>
        <tr>
            <td>爱好</td>
            <td>
                <input type="checkbox" value="踢球" name="hobby[]"/>踢球
                <input type="checkbox" value="看书" name="hobby[]"/>看书
                <input type="checkbox" value="敲代码" name="hobby[]"/>敲代码
            </td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="age"/></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            </td>
            <td><input type="submit" value="提交"/></td>
        </tr>
    </table>
</form>
