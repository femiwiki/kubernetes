Femiwiki Kubernetes YAML
========

```bash
# 개발환경 YAML 보기
kubectl kustomize ./development
# 개발환경 세팅하기
kubectl apply -k ./development

# 프로덕션 환경 YAML 보기
kubectl kustomize ./production
# 프로덕션 환경 세팅하기
kubectl apply -k ./production
```
