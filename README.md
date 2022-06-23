# database
dist資料夾中的index.html是主頁，進入主頁後，可以依照要查詢的內容選擇：
![image](https://user-images.githubusercontent.com/75972255/175318928-a9a71e09-4475-4201-8f92-f99de2b7964b.png)
1. Serch by Package ID：利用包裹編號查詢，查詢結果包含包裹的相關資料
2. Serch Sent Out：利用日曆查詢客戶當天寄出的包裹(建議搜尋#幾月幾號)
3. Delay：查詢延誤送達的包裹(僅該客戶)
4. Search MVP Customer：包含查詢年度運費最多及年度寄件最多的客戶(降序排列)
5. Serch Delivery：可以依照卡車查詢包裹現在的狀態
(以上頁面如果要回到主頁，請按上一頁)
7. Profile：能夠看到客戶自己的相關資訊
![image](https://user-images.githubusercontent.com/75972255/174860487-f85de42a-1fbf-4960-ba22-584792d09c9e.png)

# E-R Model
![delivery_relational](https://user-images.githubusercontent.com/75972255/175331709-78f7c627-2100-47b1-848c-8ab977ce79d6.jpg)
# Relational schema
![delivery_relational_schema](https://user-images.githubusercontent.com/75972255/175333679-2122ed43-9cf1-42a9-8761-88928be75fd2.jpg)
# select count(*)
![image](https://user-images.githubusercontent.com/75972255/175311516-ec3a4c74-b367-451d-85eb-1db9bbbc0009.png)
![image](https://user-images.githubusercontent.com/75972255/175311598-4c5e045d-dc59-4990-9efc-de853e7182a2.png)

# The code for each queries
•	Find the customer who has shipped the most packages in the past year.
![image](https://user-images.githubusercontent.com/75972255/175337141-7da2aa01-1454-41c9-a842-1cd3bd8b4a4d.png)
•	Find the customer who has spent the most money on shipping in the past year.
![image](https://user-images.githubusercontent.com/75972255/175337525-af676410-c73a-4400-988c-1bf850bef9df.png)


# queries in section 4

• 查詢卡車編號，沒有送達時間的就是尚未送達，然後因為它是出事了，所以就是出事了，然後前一個送達時間就是前一筆運送的包裹
![messageImage_1655992494508](https://user-images.githubusercontent.com/75972255/175338710-0e8f63f4-755d-465e-aef0-1b32e2490584.jpg)
•	Find the customer who has shipped the most packages in the past year.

•	Find the customer who has spent the most money on shipping in the past year.
![image](https://user-images.githubusercontent.com/75972255/175321174-2206d226-a850-4f1d-b38b-ceae387c7253.png)
•	包裹編號查詢，因為有輸入所以只有一筆
![messageImage_1655994426988](https://user-images.githubusercontent.com/75972255/175338388-6788087e-2b75-43d3-bddc-66e10b407305.jpg)
