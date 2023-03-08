---
statblock: true
name: Pyrohydra
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Monstrosity
cr: 13
ac: 16
hp: 218
hit_dice: '19d12 + 95'
speed: '30 ft., swim 30 ft.'
stats:
    - 20
    - 12
    - 20
    - 2
    - 12
    - 6
skillsaves:
    - { perception: 5 }
    - { stealth: 5 }
senses: 'darkvision 60 ft., passive Perception 15'
traits:
    - { name: 'Hold Breath', desc: 'The hydra can hold its breath for 1 hour.' }
    - { name: 'Legendary Resistance (3/Day)', desc: 'When the hydra fails a saving throw, it can choose to succeed instead. When it does so, its heads lose coordination. It is rattled until the end of its next turn.' }
    - { name: 'Multiple Heads', desc: "While the hydra has more than one head, it has advantage on Perception checks and on saving throws against being blinded, charmed, deafened, frightened, stunned, and knocked unconscious, and it can't be flanked." }
    - { name: 'Reactive Heads', desc: 'For each head it has, the hydra can take one reaction per round, but not more than one per turn.' }
    - { name: 'Regenerating Heads', desc: 'The hydra has seven heads. Whenever the hydra takes 30 or more damage in one turn, one of its heads dies. If all of its heads die, the hydra dies. At the end of its turn, it grows 2 heads for each head that was killed since its last turn, unless it has taken at least 20 cold damage since its last turn.' }
    - { name: 'Toxic Secretions', desc: "Water within 1 mile of the hydra's lair is poisoned. A creature other than the hydra that is immersed in the water or drinks the water makes a DC 17 Constitution saving throw. On a failure, the creature is poisoned for 24 hours. On a success, the creature is immune to this poison for 24 hours." }
    - { name: Wakeful, desc: "When some of the hydra's heads are asleep, others are awake." }
actions:
    - { name: Multiattack, desc: 'The hydra bites once with each of its heads.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +9 to hit, reach 15 ft., one target. Hit: 10 (1d10 + 5) piercing damage.' }
    - { name: 'Fire Breath (Recharge 5-6)', desc: 'If the pyrohydra has at least 4 heads, it breathes fire in all directions. Each creature within 30 feet makes a DC 18 Dexterity saving throw, taking 59 (17d6) fire damage on a failure or half damage on a success.' }
legendary_actions:
    - { name: 'The hydra can take 2 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Rush, desc: "The hydra moves or swims up to half its Speed without provoking opportunity attacks. If this movement would pass through the space of creatures that are not incapacitated or prone, each creature makes a DC 17 Strength saving throw. On a failure, the creature is knocked prone and the hydra can enter its space without treating it as difficult terrain. On a success, the hydra can't enter the creature's space, and the hydra's movement ends. If this movement ends while the hydra is sharing a space with a creature, the creature is pushed to the nearest unoccupied space." }
    - { name: Wrap, desc: "Melee Weapon Attack: +9 to hit, reach 10 ft., one Medium or smaller creature. Hit: The target is grappled (escape DC 17) and restrained until this grappled ends. The hydra can grapple one creature for each of its heads. When one of the hydra's heads is killed while it is grappling a creature, the creature that killed the head can choose one creature to free from the grapple." }
combat:
    - { name: 'The hydra prefers not to venture more than 30 feet from the water and attacks with surprise if it can', desc: "It doesn't coordinate all its attacks against a single melee opponent if there are several targets available. In melee, it usually uses one legendary action to wrap an opponent and another to rush, escaping with its grappled prey or chasing dangerous ranged attackers. It retreats into deep water if it's taking excessive damage from ranged attackers it can't reach." }

---
```statblock
monster: Pyrohydra
```
