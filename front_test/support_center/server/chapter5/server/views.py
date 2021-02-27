from django.shortcuts import render

# Create your views here.
# posts/views.py
from rest_framework import generics
from . import models
from . import serializer

class FaqList(generics.ListAPIView):
    queryset = models.Faq.objects.all()
    serializer_class = serializer.FaqSerializer

class FaqDetail(generics.RetrieveAPIView):
    queryset = models.Faq.objects.all()
    serializer_class = serializer.FaqSerializer
