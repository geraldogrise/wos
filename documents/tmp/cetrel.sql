


Use bd_cetrel
go
If Not Exists( select null from sysobjects where name = 'pwm_140715' )
   Select * Into pwm_140715 from pwm
go
Update pwm set pwm = 'AdnNet01�ueu�'
go
