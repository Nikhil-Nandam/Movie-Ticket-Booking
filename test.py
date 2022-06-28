# i = 1
# val = 0
# for _ in range(1, 1 + 92 * 5):
#     iter_val = _ % 5
#     if iter_val == 1:
#         val += 1
#     if iter_val == 0:
#         iter_val = 5
#     print((i, iter_val, iter_val, val), end=",\n")
#     i += 1

# i = 736
# seatIDs = [1, 5, 6, 9, 10, 11, 34, 35, 36, 37, 61, 62, 63, 64, 65]
# for showID in range(50, 93):
#     for j in range(1, 6):
#         for k in range(j):
#             val = i % 15
#             if val == 0:
#                 val = 15
#             print((i, showID, seatIDs[val - 1], j), end=",\n")
#             i += 1
