

 <?php
$con = mysqli_connect("kde","meno","heslo","databaza");
     mysqli_set_charset($con,"utf8");
                             
if (mysqli_connect_errno())
  {
  echo "Probl駑 s napojen匇 na MySQL: " . mysqli_connect_error();
  }
  
 $front_salt=("ｳｿ龕珮蒟韜��埇撼ｾﾀﾁﾄﾅﾈﾉﾌﾍﾏﾒﾓﾔﾘﾙﾚ轄湿ﾝﾄ"); 
  
  
   $back_salt=("MIIJJgIBAAKCAgBa/C+dTiIwgi7sh1r624vNoZN3XVRFLJDwbypMMubVV6Qa0QrR
5NfhV0c3DMV4DkIuLaj3JvJDV11y947XcZQRr6dMxgYLY1HWUTmM4Akawj+aoKUI
4fC6SquobjuX3znpYMKh3GcmPAlPMAcB13KC5Mb35MwFCYqNAbEiHI7VAfmrYz9x
I9F+5BdCPX6lUp2E0fw1/I2WPKZLdfFmBvPBbgb/VaFPP+fV0ee6TQcUflCtXgiw
cAGJOz6iliwyL0/UVLMQ2yfApmLyVeQsavpYfMAy6UZAw8hhlUoqfUmMO8uYVe2T
eTr58DUjUGVS/ZheaNJt/bPnK62i6NyykVEK8odfHfg03xPYwbUrsQOp8q0rM3c7
2D0qx/13ZyO+uhS/ok+ABoR20jCM8JhzlfYAZLsGHU18Zguugt4CtG7y6vHJpsn6
H+FGmK5D/PfsgVQYBuJhJjl9pDfe4jSvgW+xSjR5MqByOUA5Xii5ktXe7tJaqG8/
B15ZGQlEGCsXw8CchvIRldHGWHyCWoVaLNcm16JMER7lV3JTk54Whar8DoSatOAr
/mM5ThRNWpYhBhxFDY3RvpMXoCNWe2GMZN0H4qTb1Lpw7mWSnRWHIpVcSxpkC4u/
383nkozJMSRpU32wOTBY/FecMMw6Nh1gtHKFQfMTjv4pfwqn1DSgZguGLQIDAQAB
AoICAFRVy6DIysIh+XK/KCK8nAK30SPkO3d/Dr3+nLtSt0prWS6OM7RIpZ43M0ig
qu1Uch2xrxugWxD2iyVEuH+UxMX8BlwQdYvavQGl+m1NQMMv6JrgavknzOYwzppp
yw1EGb7sNJyp2mbDYXGoN+aKGJehjZg72KyWonl/ZvwScoaYtR8a+LRbmhU/QRvi
OmDtihqSNXCpL2hhwVbS9TY4HXtfDFdivQnjV3aHgX7bZUOmrgt0zSMWPyY/5xf3
kPHXjuxmsjBeo6Nb1v1/hedyJakdwV2vgrIHh9aD9eIajbDRwC7s/zEiPvtrnyWj
oLfjXnesO9k+P6J4hxMpO2C9d9tMWCr0rA35Lt8g6Y8UddkXj5EKTPTzSzExV4y5
NbEgozMmZg9YZql3Uiha6xNEsU+G8XcbF+hkdF39cctwIKBoZ1IKWj+WMYi1KnG8
6yhryqVmmn3cM42G7gJHYXhzNVkiOca3V8L7z00F+7WUDdYS1VHYkjIOIFw+90Bp
Fl1iDULxFFBtBZA6NGlIkUBgXsYRkNnIZsuRTmUar33usxxHFfLEXU2POJb0bkzo
teCbqQZpYQ4jEacxVd9r81Bdr6v4LUmP3kIQqmEJj4nKVnZYiufe7/bVgWkR/jOm
+pqpGSDpM3z/muLijvloucO9LJHKltUNQAcqAKgRgRNVVSb1AoIBAQCpwgZyFZ9r
iDYcEfRzhxyXfv9ZQrPsCCDK9eNJ8Zs1M/NrtrhuSJ8ng6HdNop+v1UTqy+62ro0
JH85WGrDBVSSSVQZuMCZaSQxiYnWe+48XKyprsZ2TfGse4E2gO6sN/Y3fMyALkBb
WoEwmfK7B1c1SaCpLpRIbqSY3ZflS+IoIWqZu5nv1weiRczZu7DKhD5+aTtp+Ev/
oxcWRuPbI/XKDnyCJqk4L0JP3FW/LbucZsqxynDcwQrHKpFMv2kiyZlT6+UI5ZCT
r3ggi4zOrhHBiHVGPXVHE3sFS8kKVmDNmgaZEqIIUH+MWvG8oOqTx44pVcZJocPq
4oEW8VxaQ1bTAoIBAQCJNU/rUTMZbxH3TTiJvzsrS7xPvT84841xozm91c70ncJV
KVg7hGHMwMkN3UA8skiNNPsvUChvIdcdQb2+peaBhSNavXapu7JlG3xeXonsiiYK
GAMNmq+SSyV1xz+0+cfTu4BXk9XbEpfLe1WSDTQGEQcb5Xb/km49epG+qGoV6CN9
1agaEFmhhgSnfi+BvXY46+FpIup5b01xaF9U5Qwu7y8iOcutfG+IHmpDQ7XPJW+x
38rpLexAMbAxJWih3DxYkJOFiy3BwmF0MC81Qs7c/TQS62BslnDV/nsfBSXrFfWD
bJL6/XjRUweNRnvn0SVhSjhsRkZTe3YnvPW+lY7/AoIBADFhd26IS6+EF/liX7Gb
g/2tu6nDdYMbei6QCGXiGjwHuK+En3G1PlbIO7WVwAPOtHjcOy4nojK4yylrRuMk
Ec3b9tLko2H868JdN/NkaZC1hKR3atPPKJX790JbjxIZ1U2ex/4hdicc1KfGoI03
PW8K0+li20+Wn9q32w+gW1FBJzlBES5rZpUVqNlNd8fxYBx1kArrZ3AdiQG57V45
v63fOOjDRkZJuQhyF59dNk3wuNWvBdWxcektwMaKh5LPAgMfg6hq3vuW92LANV2J
1TBu+W5NQmhCim6n9PtE1TP5siGlAe1ZPUEe02MDjDkgu4HaqauRmuQgr1x1KWA4
ZnECggEAOSHa0lhwV6HZMEmWRj07jQ6vLeDWZ4d6mRvnWjWiRFdAaSebFsVL1+9a
iIxdSCjQbwPlp9DP1V6Y7RTHxo/cCIiArTMBKzH92X31bnIdKkJoDoHrG4oSm27w
/TbnPxtW6sJDcbQcM2ltjYwgmH0o8XG7rRECWO8HOlBESchkzBRqWuZRZfDy8YAV
hgzUCUjz5kXKCXZBfikrbRKRx47MYOq1jKHWPrn20w4fHz0dglDLTpyqKCg4HI7U
F9LE28kR06r30n6eofSnkbLSpXHZI0nHmi0qbGzENUcOy17gaCAvp/bYyOwsl7Tk
Cx6TT3bWAsnd7q/gbriU/X0AMsihzwKCAQB+naFiryNxJ2FTj5daA+XlSIdUtYPZ
kgYYm8O4IwtHYrGsP3oXmcMXeKpw/IPbQNxYG4wiZDPK3l2bFCNWci21HVgGn3wU
epSCH+ipuwiAzOv/XHSZUNIOQRnEspusuyi6JpDkCLhbVowcQ7YE88bou986LZzu
u6DzYRxGBlAFMFJpGA7ghBD9WY6Th7Pxa2elE9xmaHCi6yqMBYXBTVZAz5POXGEu
Hr6RKNeemg7qTRwVS3n5WnM/ds6Z+GSD0YEUUQMi1jqS4J6rUvOy5nh7u+g5UQE8
hGZh32cqhqadC/0uC1CdX2PddNKAyUXVoiZ0CQxLGJjNk0CPolIbyXHz");
?>
