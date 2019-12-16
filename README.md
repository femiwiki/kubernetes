Femiwiki Kubernetes
========
- [`infra/`]: "infra" is YAMLs which should be deployed ahead of "service"
  YAMLs. It includes CertManager, Storage Class, etc.
- [`service/`]: "service" is actual YAMLs for Femiwiki services.
- [`test/`]: "test" is YAMLs that are not actually deployed to the Femiwiki
  Kubernetes. It contains YAML snippets for testing and debugging.

[`infra/`]: infra/
[`service/`]: service/
[`test/`]: test/

See [femiwiki/infra](https://github.com/femiwiki/infra) for Terraform codes of
Femiwiki infrastructure.
