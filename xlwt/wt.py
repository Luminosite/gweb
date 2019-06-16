import xlwt

if __name__ == '__main__':
    workbook = xlwt.Workbook()
    worksheet = workbook.add_sheet('s1')
    sv = u"中文测试"
    print(sv)
    des_str = sv.encode("gbk")
    print(des_str)
    worksheet.write(0, 0, label=sv)
    workbook.save("test.xls")

