#!/home/mathewjimson/Djangosdls/virtualenvsdls/bin/python
#/usr/bin/perl
#system("/home/mathewjimson/Djangosdls/virtualenvsdls/bin/python /home/mathewjimson/Djangosdls/sdls/substationdatalogger/wsgi.py 2>&1");

#/home/mathewjimson/Djangosdls/virtualenvsdls/bin/python
import sys, os
sys.path.insert(0,"/home/mathewjimson/Djangosdls/sdls/substationdatalogger")
sys.path.insert(0,"/home/mathewjimson/Djangosdls/sdls")
os.environ['DJANGO_SETTINGS_MODULE'] = 'substationdatalogger.settings'
os.environ.setdefault("DJANGO_SETTINGS_MODULE", "substationdatalogger.settings")

os.environ['REQUEST_METHOD'] = 'GET'
os.environ['SERVER_NAME'] = 'sdls.icscc.online'
os.environ['SERVER_PORT'] = '80'
os.environ['SERVER_PROTOCOL'] = 'HTTP/1.1'
 
from flup.server.fcgi import WSGIServer
from django.core.wsgi import get_wsgi_application
from whitenoise.django import DjangoWhiteNoise

#print "Content-type: text/html\n\n"
#print "Test"
#print(os.environ['DJANGO_SETTINGS_MODULE'])
#print(sys.path)
#print "\n\n"

application = get_wsgi_application()
#print(os.environ['REQUEST_METHOD'])
#print(os.environ['SERVER_NAME'])
#print(os.environ['SERVER_PORT'])
#print(os.environ['SERVER_PROTOCOL'])
application = DjangoWhiteNoise(application)
WSGIServer(application).run()
