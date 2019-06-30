from django.http import HttpResponse
from django.shortcuts import render_to_response


def info_reg(request):
    request.encoding = 'utf-8'
    params = request.GET
    record_str = ['{k}: {v}'.format(k=k, v=params[k]) for k in params]
    r_str = ';'.join(record_str)
    return HttpResponse(r_str)


def info_page(request):
    return render_to_response('InputForm.html')
