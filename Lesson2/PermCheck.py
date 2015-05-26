def solution(A):
    a_len = len(A)
    A = list(set(A))
    A.sort()  # get median
    median = int(a_len / 2)

    s1 = sum(A[0:median])
    s2 = sum(A[median:])

    sr1 = sum(range(1, median + 1))
    sr2 = sum(range(median + 1, a_len + 1))

    return 1 if (s1 == sr1 and s2 == sr2) else 0