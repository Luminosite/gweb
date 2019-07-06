from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.shortcuts import render
from django.shortcuts import redirect  #重新定向模块
from django.views.decorators.csrf import csrf_protect
from django.views.decorators.csrf import csrf_exempt


def info_reg(request):
    request.encoding = 'utf-8'
    params = request.GET
    record_str = ['{k}: {v}'.format(k=k, v=params[k]) for k in params]
    r_str = ';'.join(record_str)
    return HttpResponse(r_str)


def info_page(request):
    return render_to_response('InputForm.html')


def main(r):
    return render_to_response('main.html')


def login_page(_):
    return render_to_response('login.html')


@csrf_exempt
def login(request):
    """
      包含用户提交的所有信息
      获取用户提交方法
      print(request.method)
    :param request:
    :return:
    """
    error_msg = ""
    if request.method == "POST":
        # 获取用户通过POST提交过来的数据
        user = request.POST.get('user', None)
        pwd = request.POST.get('pwd', None)
        if user == 'root' and pwd == '123':
            # 去跳转到
            return HttpResponseRedirect('main.html')
        else:
            # 用户密码不匹配
            print("kmsg: error")
            error_msg = '用户名或密码错误'
        # user = request.POST['user']
        # pwd = request.POST['pwd']
        # print(user,pwd)
    return render(request, 'login.html', {'error_msg': error_msg})
