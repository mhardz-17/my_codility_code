# you can use print for debugging purposes, e.g.
# print "this is a debug message"


def solution(A):
    a_len = len(A)

    if not A:
        return 1

    # validate for single element
    if a_len == 1:
        return 1 if A[0] == 2 else 2

    A = list(set(A))
    A.sort()

    max_index = a_len - 1
    min_index = 0

    while max_index - min_index != 1:
        median = int((max_index - min_index) / 2)
        median += min_index
        if A[median] == median + 1:
            min_index = median
        else:
            max_index = median

    if A[min_index] == 1 or A[min_index] - 1 in A:
        return A[max_index] + 1 if (A[max_index] - 1) in A else A[max_index] - 1
    else:
        return A[min_index] - 1


A = [2, 3]
print solution(A)