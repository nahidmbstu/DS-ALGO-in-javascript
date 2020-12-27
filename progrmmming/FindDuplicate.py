nums = [2, 3, 4, 7, 12, 2,  1, 31, 10, 19, 4, 76]

bucket = {}

for i in range(len(nums)):
    if (nums[i]) not in bucket:
        bucket[nums[i]] = 1
    else:
        bucket[nums[i]] += 1

duplicates = []

for key, value in bucket.items():
    if (value > 1):
        duplicates.append(key)


print(duplicates)
