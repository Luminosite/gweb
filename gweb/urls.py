"""gweb URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.urls import re_path, path
from django.views.generic.base import TemplateView
from .views_entrance import v, test
from .info_register import info_reg, info_page, login_page, login, main

urlpatterns = [
    # path('admin/', admin.site.urls),
    path('', login_page),
    path('login_page/', login_page),
    path('login/', login),
    path('main/', main),
    path('info', info_page),
    re_path('info_input', info_reg),
    path('vue/', test),
    path('v/', v),
    path('p', TemplateView.as_view(template_name="mint-start.html"))
]
