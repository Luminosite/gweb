from django.urls import path
from . import views

urlpatterns = [
    path('', views.FaqList.as_view()),
    path('<int:pk>/', views.FaqDetail.as_view()),
]
